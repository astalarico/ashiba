<?php

namespace Ashiba;
use Ashiba\Utility;
use const Ashiba\Defines\APP_PATH;

class ResourceFiles
{
    public function __construct( $input, $output, $resourceArea, $createView = 'no' )
    {

        $rawName             = $input->getArgument( 'name' );
        $className           = ucfirst( $rawName );
        $slug                = strtolower( Utility::camelToOther( $rawName ) );
        $snaked              = strtolower( Utility::camelToOther( $rawName, '_'  ) );
        $scssFileLocation    = "/var/www/html/wp/wp-content/plugins/mid-functions/resources/sass/{$resourceArea}/{$slug}";
        $jsFileLocation      = "/var/www/html/wp/wp-content/plugins/mid-functions/resources/js/{$resourceArea}/{$slug}";
        $packageJSONLocation = '/var/www/html/wp/wp-content/plugins/mid-functions/package.json';
        $webpackFileLocation = '/var/www/html/wp/wp-content/plugins/mid-functions/webpack.mix.js';
        $webpackStubLocation = APP_PATH . '/stubs/webpack.stub';
        $viewFilesLocation   = '/var/www/html/wp/wp-content/plugins/mid-functions/resources/views/';

        if( ! is_dir( $jsFileLocation ) )
        {
            mkdir( $jsFileLocation );
            file_put_contents( $jsFileLocation . '/index.js', '' );
            $output->writeln( "<info> JS File {$className} Created!</info>" );
        }else{
            $output->writeln( "<comment> Resource File {$className} Already Exists!</comment>" );
        }

        if( ! is_dir( $scssFileLocation ) )
        {
            mkdir( $scssFileLocation );
            file_put_contents( $scssFileLocation . '/index.scss', '' );
            $output->writeln( "<info> SCSS File {$className} Created!</info>" );
        } else {
            $output->writeln( "<comment> Resource File {$className} Already Exists!</comment>" );
        }

        // update package json
        $package = json_decode( file_get_contents( '/var/www/html/wp/wp-content/plugins/mid-functions/package.json' ), true );

        if( $package !== null )
        {
            foreach( $package['scripts'] as $key => $command )
            {
                $package['scripts'][ "{$slug}-watch"] = "npm run watch --{$snaked}";
                $package['scripts'][ "{$slug}-dev"] = "npm run development --{$snaked}";
                $package['scripts'][ "{$slug}-build"] = "npm run production --{$snaked}";
            }
            $package = json_encode( $package );
            file_put_contents( $packageJSONLocation, $package );
            $output->writeln( "<info> Updated package.json with new scripts</info>" );
        }else{
            $output->writeln( '<error>' .json_last_error_msg() . " in the package.json file. check for trailing commas. </error>" );
        }
    
        //update webpack config
        $currentWebpack = file_get_contents( $webpackFileLocation );
        if( strpos( $currentWebpack, "process.env.npm_config_{$snaked}" ) === false ){
               
            $stubContent = file_get_contents( $webpackStubLocation );

            $webpack  = str_replace( 
                ['{{arg_snaked}}', '{{arg_slug}}'], 
                [$snaked, $slug], 
                $stubContent 
            );

            file_put_contents( $webpackFileLocation, $webpack, FILE_APPEND );
            $output->writeln( "<info> Updated webpack.mix.js with new build directives </info>" );
        }else{
            $output->writeln( "<comment> webpack.mix.js {$className} directives already exist!</comment>" );
        }

        // create view file
        if( $createView === 'yes' )
        {
            if( ! file_exists( $viewFilesLocation . "$slug.php" ) )
            {
                file_put_contents( $viewFilesLocation . "$slug.php", '');
                $output->writeln( "<info> {$className} view file Created!</info>" );
            }else{
                $output->writeln( "<comment> {$className} view file already exists!</comment>" );
            }
        }
    }
}