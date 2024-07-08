<?php
class DividerRunonceJobTemp extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->import('Files');
    }
    public function run()
    {
        $rootDir = System::getContainer()->getParameter('kernel.project_dir');
        
        if ((@include($rootDir . '/system/modules/Divider/config/config.php')) !== false)
        {
            $this->Files->rrdir('system/modules/Divider');
        }
    }
}
$objDividerRunonceJob = new DividerRunonceJobTemp();
$objDividerRunonceJob->run();
