<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResourceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:resource {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = base_path("app/Http/Resources/").$this->argument("name").".php";
        $path_dir = base_path("app/Http/Resources/");
        if(!is_dir($path_dir)){
            mkdir($path_dir);
        }
        if(file_exists($path)){
            echo "\n\n";
            echo "The resource file alreay exists";
            echo "\n";
        }else{
            fopen($path,"w+");
$content = '<?php 
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class '.$this->argument("name").' extends JsonResource
{
    public function toArray($request)
    {
        return [];
    }
}
    ';
            file_put_contents($path,$content);
            echo "\n\n";
            echo "The resource created successfuly";
            echo "\n";
        }
       
    }
}
