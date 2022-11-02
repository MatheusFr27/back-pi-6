<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateCrud extends Command
{
    private $crudName;
    private $crudNameCamelCase;
    private $tableName;
    private $continue;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria crud padrao da api.';

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
     * @return int
     */
    public function handle()
    {
        $this->formatNames()
            ->createModel()
            ->createRepository()
            ->createRequest()
            ->createBO()
            ->createController();

        print_r('Crud gerado com sucesso.');

        return 0;
    }

    private function formatNames()
    {
        $this->crudName = ucfirst($this->argument('name'));

        $this->crudNameCamelCase = lcfirst($this->argument('name'));

        $this->tableName = ltrim(strtolower(preg_replace('/[A-Z]/', '_$0', $this->argument('name'))), '_');

        return $this;
    }

    private function validateIfFileExists(string $path)
    {
        $this->continue = file_exists($path);

        return $this;
    }

    private function createFile(string $path, string $data)
    {

        if (!$this->continue) {
            file_put_contents($path, $data);
        }

        return $this;
    }

    private function createModel()
    {
        $viewTemplate = view('crud_templates.Model', ['crudName' => $this->crudName, 'tableName' => $this->tableName]);

        $path = "app/Models/" . $this->crudName . '.php';
        $data = '<?php' . PHP_EOL . PHP_EOL . $viewTemplate;

        $this->validateIfFileExists($path)->createFile($path, $data);

        return $this;
    }

    private function createRepository()
    {
        $viewTemplate = view('crud_templates.Repository', ['crudName' => $this->crudName]);

        $path = "app/Repositories/" . $this->crudName . 'Repository.php';
        $data = '<?php' . PHP_EOL . PHP_EOL . $viewTemplate;

        $this->validateIfFileExists($path)->createFile($path, $data);

        return $this;
    }

    private function createRequest()
    {
        $viewTemplate = view('crud_templates.Request', ['crudName' => $this->crudName]);

        $path = "app/Http/Requests/" . $this->crudName . 'Request.php';
        $data = '<?php' . PHP_EOL . PHP_EOL . $viewTemplate;

        $this->validateIfFileExists($path)->createFile($path, $data);

        return $this;
    }

    private function createBO()
    {
        $viewTemplate = view('crud_templates.BO', ['crudName' => $this->crudName]);

        $path = "app/BO/" . $this->crudName . 'BO.php';
        $data = '<?php' . PHP_EOL . PHP_EOL . $viewTemplate;

        $this->validateIfFileExists($path)->createFile($path, $data);

        return $this;
    }

    private function createController()
    {
        $viewTemplate = view('crud_templates.Controller', ['crudName' => $this->crudName, 'crudNameCamelCase' => $this->crudNameCamelCase]);

        $path = "app/Http/Controllers/" . $this->crudName . 'Controller.php';
        $data = '<?php' . PHP_EOL . PHP_EOL . $viewTemplate;

        $this->validateIfFileExists($path)->createFile($path, $data);

        return $this;
    }
}
