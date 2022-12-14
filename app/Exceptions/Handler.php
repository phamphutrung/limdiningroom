<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        switch ($exception) {
            case ($exception instanceof ActionException
                || $exception instanceof BaseException
            ):

                return $this->setResponse($exception->getStatusCode(), $exception->getErrorDescription());
            case ($exception instanceof ValidationException):

                return $this->setResponse(422, $exception->errors());
            case ($exception instanceof MethodNotAllowedHttpException):

                return $this->setResponse($exception->getStatusCode(), $exception->getMessage());
            default:
                break;
        }

        return parent::render($request, $exception);
    }

    private function setResponse(int $httpCode, $description = [])
    {
        $response = [
            'message' => [
                'status' => false,
                'code' => $httpCode,
                'description' => $description
            ]
        ];

        return response()->json($response, $httpCode);
    }
}
