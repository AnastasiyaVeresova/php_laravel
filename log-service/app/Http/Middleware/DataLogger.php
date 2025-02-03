<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Log;

class DataLogger
{
    protected $start_time;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->start_time = microtime(true);

        return $next($request);
    }

    /**
     * Terminate the request lifecycle.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @return void
     */
    public function terminate(Request $request, Response $response)
    {
        if (env('API_DATA_LOGGER', true)) {
            $end_time = microtime(true);
            $duration = number_format($end_time - $this->start_time, 3);

            if (env('API_DATALOGGER_USE_DB', true)) {
                // Если в env файле прописано значение API_DATALOGGER_USE_DB = true, тогда выполняем логирование данных в БД
                $log = new Log();
                $log->time = date('Y-m-d H:i:s');
                $log->duration = $duration;
                $log->ip = $request->ip();
                $log->url = $request->url();
                $log->method = $request->method();
                $log->input = $request->getContent();
                $log->save();

                Log::info('Log saved:', $log->toArray());
            } else {
                $filename = 'api_datalogger_' . date('d-m-y') . '.log';
                $dataToLog = 'Time: ' . date('Y-m-d H:i:s') . '\n';
                $dataToLog .= 'Duration: ' . $duration . 's\n';
                $dataToLog .= 'IP Address: ' . $request->ip() . '\n';
                $dataToLog .= 'URL: ' . $request->url() . '\n';
                $dataToLog .= 'Method: ' . $request->method() . '\n';
                $dataToLog .= 'Input: ' . $request->getContent() . '\n';
                File::append(storage_path('logs' . DIRECTORY_SEPARATOR . $filename), $dataToLog . '\n' . str_repeat('=', 20) . '\n\n');
            }
        }
    }
}
