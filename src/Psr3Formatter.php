<?php

declare(strict_types=1);


namespace App;


class Psr3Formatter
{
    public static function format(string $level, string $message, array $context)
    {
        if (str_contains($message, '{')) {
            $replacements = [];
            foreach ($context as $key => $val) {
                if (null === $val || is_scalar($val) || (\is_object($val) && method_exists($val, '__toString'))) {
                    $replacements["{{$key}}"] = $val;
                } elseif ($val instanceof \DateTimeInterface) {
                    $replacements["{{$key}}"] = $val->format(\DateTime::RFC3339);
                } elseif (\is_object($val)) {
                    $replacements["{{$key}}"] = '[object '.\get_class($val).']';
                } else {
                    $replacements["{{$key}}"] = '['.\gettype($val).']';
                }
            }

            $message = strtr($message, $replacements);
        }

        $data = [];
        /** @var \Throwable|null $exception */
        $exception = $context['exception'] ?? null;
        if (null !== $exception) {
            $data['exception_class'] = get_class($exception);
            //$data['exception_stack'] = $exception->getTraceAsString();
            $data['exception_message'] = $exception->getMessage();
            $data['exception_file'] = $exception->getFile();
            $data['exception_line'] = $exception->getLine();
        }

        $log = sprintf('## [%s] %s :: %s', $level, $message, json_encode($data)).\PHP_EOL;

        return $log;
    }
}
