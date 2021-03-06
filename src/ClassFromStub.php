<?php

namespace Ashiba;
use Ashiba\Utility;
use const Ashiba\Defines\APP_PATH;

class ClassFromStub{
    public function __construct( $input, $output, $entityName ){
        $entitySingular = substr( $entityName, strpos( $entityName, ":") + 1 );
        $entityPlural   = Utility::pluralize( $entitySingular );
        $rawName        = $input->getArgument('name');
        $className      = ucfirst( $rawName );
        $stubContents   = file_get_contents( APP_PATH . "/stubs/" . ucfirst($entitySingular) . ".stub");
        $classContents  = str_replace( '{{className}}', $className, $stubContents );

        $fileLocation = "/var/www/html/wp/wp-content/plugins/mid-functions/app/{$entityPlural}/{$className}.php";
        if( ! file_exists( $fileLocation ) ){
            file_put_contents(  $fileLocation , $classContents );
            $output->writeln("<info> {$entitySingular } {$className} Created!</info>");
        }else{
            $output->writeln("<comment> {$entitySingular} {$className} Already Exists!</comment>");
        }
    }
}