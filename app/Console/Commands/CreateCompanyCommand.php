<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class CreateCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:company';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'creates a company';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask("Enter company name ?");
        $phone = $this->ask("Enter phone number ?");
        if($this->confirm("Are u sure u want to create ".$name." company")){
            $company = Company::create([
                "name" => $name,
                "phone" => $phone
            ]); 
          return  $this->info($company->name." Successfully created company");
        }
        // $this->error("Successfully errored company");
        return $this->warn("failed to add  a company");
    }
}
