<?php

namespace App\Exceptions;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
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
          //  parent::report($exception);
        });
    }
    // public function render($request, Exception $exception)
    // {
    //     if ($this->isHttpException($exception)) {
    //         if ($exception->getStatusCode() == 404) {
    //             return response()->view('errors' . '404', [], 404);
    //         }
    //     }
    //     return parent::render($request, $exception);
    // }
}