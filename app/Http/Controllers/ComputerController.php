<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ComputerController extends Controller {

    public function index() {
        return view('is-computer');
    }

    public function isComputer(Request $request) {
        $image = $request->file("image");
        $temp = tmpfile();

//        $process = new Process('python /path/to/your_script.py');
        $process = new Process('ls -la');
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return view('is-computer-response')->with(['result' => $process->getOutput()]);
    }

}