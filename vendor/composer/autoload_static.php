<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit063b61b6938ab966ca6c2a435c73c153
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'Ashiba\\Commands\\' => 16,
            'Ashiba\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Ashiba\\Commands\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/commands',
        ),
        'Ashiba\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Ashiba\\ClassFromStub' => __DIR__ . '/../..' . '/src/ClassFromStub.php',
        'Ashiba\\Commands\\ActionAddCommand' => __DIR__ . '/../..' . '/src/commands/ActionAddCommand.php',
        'Ashiba\\Commands\\ActionDeleteCommand' => __DIR__ . '/../..' . '/src/commands/ActionDeleteCommand.php',
        'Ashiba\\Commands\\ControllerCreateCommand' => __DIR__ . '/../..' . '/src/commands/ControllerCreateCommand.php',
        'Ashiba\\Commands\\ControllerDeleteCommand' => __DIR__ . '/../..' . '/src/commands/ControllerDeleteCommand.php',
        'Ashiba\\Commands\\ForgePluginCommand' => __DIR__ . '/../..' . '/src/commands/ForgePluginCommand.php',
        'Ashiba\\Commands\\ModelCreateCommand' => __DIR__ . '/../..' . '/src/commands/ModelCreateCommand.php',
        'Ashiba\\Commands\\ModelDeleteCommand' => __DIR__ . '/../..' . '/src/commands/ModelDeleteCommand.php',
        'Ashiba\\Commands\\PrefixComposerCommand' => __DIR__ . '/../..' . '/src/commands/PrefixComposerCommand.php',
        'Ashiba\\Commands\\ResourceDeleteCommand' => __DIR__ . '/../..' . '/src/commands/ResourceDeleteCommand.php',
        'Ashiba\\Commands\\ResourceSetCreateCommand' => __DIR__ . '/../..' . '/src/commands/ResourceSetCreateCommand.php',
        'Ashiba\\Commands\\ShortcodeCreateCommand' => __DIR__ . '/../..' . '/src/commands/ShortcodeCreateCommand.php',
        'Ashiba\\Commands\\ShortcodeDeleteCommand' => __DIR__ . '/../..' . '/src/commands/ShortcodeDeleteCommand.php',
        'Ashiba\\Commands\\UpdateNamespacesCommand' => __DIR__ . '/../..' . '/src/commands/UpdateNamespacesCommand.php',
        'Ashiba\\ResourceFiles' => __DIR__ . '/../..' . '/src/ResourceFiles.php',
        'Ashiba\\Utility' => __DIR__ . '/../..' . '/src/Utility.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GuzzleHttp\\BatchResults' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BatchResults.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Collection' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Collection.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Event\\AbstractEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractEvent.php',
        'GuzzleHttp\\Event\\AbstractRequestEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRequestEvent.php',
        'GuzzleHttp\\Event\\AbstractRetryableEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRetryableEvent.php',
        'GuzzleHttp\\Event\\AbstractTransferEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractTransferEvent.php',
        'GuzzleHttp\\Event\\BeforeEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/BeforeEvent.php',
        'GuzzleHttp\\Event\\CompleteEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/CompleteEvent.php',
        'GuzzleHttp\\Event\\Emitter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/Emitter.php',
        'GuzzleHttp\\Event\\EmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EmitterInterface.php',
        'GuzzleHttp\\Event\\EndEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EndEvent.php',
        'GuzzleHttp\\Event\\ErrorEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ErrorEvent.php',
        'GuzzleHttp\\Event\\EventInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EventInterface.php',
        'GuzzleHttp\\Event\\HasEmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterInterface.php',
        'GuzzleHttp\\Event\\HasEmitterTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterTrait.php',
        'GuzzleHttp\\Event\\ListenerAttacherTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ListenerAttacherTrait.php',
        'GuzzleHttp\\Event\\ProgressEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ProgressEvent.php',
        'GuzzleHttp\\Event\\RequestEvents' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/RequestEvents.php',
        'GuzzleHttp\\Event\\SubscriberInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/SubscriberInterface.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\CouldNotRewindStreamException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/CouldNotRewindStreamException.php',
        'GuzzleHttp\\Exception\\ParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ParseException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\StateException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/StateException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\Exception\\XmlParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/XmlParseException.php',
        'GuzzleHttp\\HasDataTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HasDataTrait.php',
        'GuzzleHttp\\Message\\AbstractMessage' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AbstractMessage.php',
        'GuzzleHttp\\Message\\AppliesHeadersInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AppliesHeadersInterface.php',
        'GuzzleHttp\\Message\\FutureResponse' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/FutureResponse.php',
        'GuzzleHttp\\Message\\MessageFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactory.php',
        'GuzzleHttp\\Message\\MessageFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactoryInterface.php',
        'GuzzleHttp\\Message\\MessageInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageInterface.php',
        'GuzzleHttp\\Message\\MessageParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageParser.php',
        'GuzzleHttp\\Message\\Request' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Request.php',
        'GuzzleHttp\\Message\\RequestInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/RequestInterface.php',
        'GuzzleHttp\\Message\\Response' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Response.php',
        'GuzzleHttp\\Message\\ResponseInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/ResponseInterface.php',
        'GuzzleHttp\\Mimetypes' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Mimetypes.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\Post\\MultipartBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/MultipartBody.php',
        'GuzzleHttp\\Post\\PostBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBody.php',
        'GuzzleHttp\\Post\\PostBodyInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBodyInterface.php',
        'GuzzleHttp\\Post\\PostFile' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFile.php',
        'GuzzleHttp\\Post\\PostFileInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFileInterface.php',
        'GuzzleHttp\\Query' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Query.php',
        'GuzzleHttp\\QueryParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/QueryParser.php',
        'GuzzleHttp\\RequestFsm' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestFsm.php',
        'GuzzleHttp\\RingBridge' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RingBridge.php',
        'GuzzleHttp\\Ring\\Client\\ClientUtils' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/ClientUtils.php',
        'GuzzleHttp\\Ring\\Client\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlFactory.php',
        'GuzzleHttp\\Ring\\Client\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlHandler.php',
        'GuzzleHttp\\Ring\\Client\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlMultiHandler.php',
        'GuzzleHttp\\Ring\\Client\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/Middleware.php',
        'GuzzleHttp\\Ring\\Client\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/MockHandler.php',
        'GuzzleHttp\\Ring\\Client\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/StreamHandler.php',
        'GuzzleHttp\\Ring\\Core' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Core.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledException.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledFutureAccessException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledFutureAccessException.php',
        'GuzzleHttp\\Ring\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/ConnectException.php',
        'GuzzleHttp\\Ring\\Exception\\RingException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/RingException.php',
        'GuzzleHttp\\Ring\\Future\\BaseFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/BaseFutureTrait.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureArray.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureValue.php',
        'GuzzleHttp\\Ring\\Future\\FutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArray.php',
        'GuzzleHttp\\Ring\\Future\\FutureArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArrayInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureValue.php',
        'GuzzleHttp\\Ring\\Future\\MagicFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/MagicFutureTrait.php',
        'GuzzleHttp\\Stream\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AppendStream.php',
        'GuzzleHttp\\Stream\\AsyncReadStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AsyncReadStream.php',
        'GuzzleHttp\\Stream\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/BufferStream.php',
        'GuzzleHttp\\Stream\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/CachingStream.php',
        'GuzzleHttp\\Stream\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/DroppingStream.php',
        'GuzzleHttp\\Stream\\Exception\\CannotAttachException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/CannotAttachException.php',
        'GuzzleHttp\\Stream\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/SeekException.php',
        'GuzzleHttp\\Stream\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/FnStream.php',
        'GuzzleHttp\\Stream\\GuzzleStreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/streams/src/GuzzleStreamWrapper.php',
        'GuzzleHttp\\Stream\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/InflateStream.php',
        'GuzzleHttp\\Stream\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LazyOpenStream.php',
        'GuzzleHttp\\Stream\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LimitStream.php',
        'GuzzleHttp\\Stream\\MetadataStreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/MetadataStreamInterface.php',
        'GuzzleHttp\\Stream\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NoSeekStream.php',
        'GuzzleHttp\\Stream\\NullStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NullStream.php',
        'GuzzleHttp\\Stream\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/PumpStream.php',
        'GuzzleHttp\\Stream\\Stream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Stream.php',
        'GuzzleHttp\\Stream\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Stream\\StreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamInterface.php',
        'GuzzleHttp\\Stream\\Utils' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Utils.php',
        'GuzzleHttp\\Subscriber\\Cookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Cookie.php',
        'GuzzleHttp\\Subscriber\\History' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/History.php',
        'GuzzleHttp\\Subscriber\\HttpError' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/HttpError.php',
        'GuzzleHttp\\Subscriber\\Mock' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Mock.php',
        'GuzzleHttp\\Subscriber\\Prepare' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Prepare.php',
        'GuzzleHttp\\Subscriber\\Redirect' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Redirect.php',
        'GuzzleHttp\\ToArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ToArrayInterface.php',
        'GuzzleHttp\\Transaction' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Transaction.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'GuzzleHttp\\Url' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Url.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\Console\\Application' => __DIR__ . '/..' . '/symfony/console/Application.php',
        'Symfony\\Component\\Console\\Command\\Command' => __DIR__ . '/..' . '/symfony/console/Command/Command.php',
        'Symfony\\Component\\Console\\Command\\HelpCommand' => __DIR__ . '/..' . '/symfony/console/Command/HelpCommand.php',
        'Symfony\\Component\\Console\\Command\\ListCommand' => __DIR__ . '/..' . '/symfony/console/Command/ListCommand.php',
        'Symfony\\Component\\Console\\ConsoleEvents' => __DIR__ . '/..' . '/symfony/console/ConsoleEvents.php',
        'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => __DIR__ . '/..' . '/symfony/console/Descriptor/ApplicationDescription.php',
        'Symfony\\Component\\Console\\Descriptor\\Descriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/Descriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => __DIR__ . '/..' . '/symfony/console/Descriptor/DescriptorInterface.php',
        'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/JsonDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/MarkdownDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/TextDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/XmlDescriptor.php',
        'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleCommandEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleExceptionEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleExceptionEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleTerminateEvent.php',
        'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/CommandNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/console/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidOptionException.php',
        'Symfony\\Component\\Console\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/console/Exception/LogicException.php',
        'Symfony\\Component\\Console\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/console/Exception/RuntimeException.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatter.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyle.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
        'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DebugFormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DescriptorHelper.php',
        'Symfony\\Component\\Console\\Helper\\DialogHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DialogHelper.php',
        'Symfony\\Component\\Console\\Helper\\FormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/FormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\Helper' => __DIR__ . '/..' . '/symfony/console/Helper/Helper.php',
        'Symfony\\Component\\Console\\Helper\\HelperInterface' => __DIR__ . '/..' . '/symfony/console/Helper/HelperInterface.php',
        'Symfony\\Component\\Console\\Helper\\HelperSet' => __DIR__ . '/..' . '/symfony/console/Helper/HelperSet.php',
        'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => __DIR__ . '/..' . '/symfony/console/Helper/InputAwareHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProcessHelper' => __DIR__ . '/..' . '/symfony/console/Helper/ProcessHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProgressBar' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressBar.php',
        'Symfony\\Component\\Console\\Helper\\ProgressHelper' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressIndicator.php',
        'Symfony\\Component\\Console\\Helper\\QuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/QuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/SymfonyQuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\Table' => __DIR__ . '/..' . '/symfony/console/Helper/Table.php',
        'Symfony\\Component\\Console\\Helper\\TableCell' => __DIR__ . '/..' . '/symfony/console/Helper/TableCell.php',
        'Symfony\\Component\\Console\\Helper\\TableHelper' => __DIR__ . '/..' . '/symfony/console/Helper/TableHelper.php',
        'Symfony\\Component\\Console\\Helper\\TableSeparator' => __DIR__ . '/..' . '/symfony/console/Helper/TableSeparator.php',
        'Symfony\\Component\\Console\\Helper\\TableStyle' => __DIR__ . '/..' . '/symfony/console/Helper/TableStyle.php',
        'Symfony\\Component\\Console\\Input\\ArgvInput' => __DIR__ . '/..' . '/symfony/console/Input/ArgvInput.php',
        'Symfony\\Component\\Console\\Input\\ArrayInput' => __DIR__ . '/..' . '/symfony/console/Input/ArrayInput.php',
        'Symfony\\Component\\Console\\Input\\Input' => __DIR__ . '/..' . '/symfony/console/Input/Input.php',
        'Symfony\\Component\\Console\\Input\\InputArgument' => __DIR__ . '/..' . '/symfony/console/Input/InputArgument.php',
        'Symfony\\Component\\Console\\Input\\InputAwareInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputAwareInterface.php',
        'Symfony\\Component\\Console\\Input\\InputDefinition' => __DIR__ . '/..' . '/symfony/console/Input/InputDefinition.php',
        'Symfony\\Component\\Console\\Input\\InputInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputInterface.php',
        'Symfony\\Component\\Console\\Input\\InputOption' => __DIR__ . '/..' . '/symfony/console/Input/InputOption.php',
        'Symfony\\Component\\Console\\Input\\StringInput' => __DIR__ . '/..' . '/symfony/console/Input/StringInput.php',
        'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => __DIR__ . '/..' . '/symfony/console/Logger/ConsoleLogger.php',
        'Symfony\\Component\\Console\\Output\\BufferedOutput' => __DIR__ . '/..' . '/symfony/console/Output/BufferedOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutputInterface.php',
        'Symfony\\Component\\Console\\Output\\NullOutput' => __DIR__ . '/..' . '/symfony/console/Output/NullOutput.php',
        'Symfony\\Component\\Console\\Output\\Output' => __DIR__ . '/..' . '/symfony/console/Output/Output.php',
        'Symfony\\Component\\Console\\Output\\OutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/OutputInterface.php',
        'Symfony\\Component\\Console\\Output\\StreamOutput' => __DIR__ . '/..' . '/symfony/console/Output/StreamOutput.php',
        'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ChoiceQuestion.php',
        'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ConfirmationQuestion.php',
        'Symfony\\Component\\Console\\Question\\Question' => __DIR__ . '/..' . '/symfony/console/Question/Question.php',
        'Symfony\\Component\\Console\\Shell' => __DIR__ . '/..' . '/symfony/console/Shell.php',
        'Symfony\\Component\\Console\\Style\\OutputStyle' => __DIR__ . '/..' . '/symfony/console/Style/OutputStyle.php',
        'Symfony\\Component\\Console\\Style\\StyleInterface' => __DIR__ . '/..' . '/symfony/console/Style/StyleInterface.php',
        'Symfony\\Component\\Console\\Style\\SymfonyStyle' => __DIR__ . '/..' . '/symfony/console/Style/SymfonyStyle.php',
        'Symfony\\Component\\Console\\Tester\\ApplicationTester' => __DIR__ . '/..' . '/symfony/console/Tester/ApplicationTester.php',
        'Symfony\\Component\\Console\\Tester\\CommandTester' => __DIR__ . '/..' . '/symfony/console/Tester/CommandTester.php',
        'Symfony\\Component\\Debug\\BufferingLogger' => __DIR__ . '/..' . '/symfony/debug/BufferingLogger.php',
        'Symfony\\Component\\Debug\\Debug' => __DIR__ . '/..' . '/symfony/debug/Debug.php',
        'Symfony\\Component\\Debug\\DebugClassLoader' => __DIR__ . '/..' . '/symfony/debug/DebugClassLoader.php',
        'Symfony\\Component\\Debug\\ErrorHandler' => __DIR__ . '/..' . '/symfony/debug/ErrorHandler.php',
        'Symfony\\Component\\Debug\\ExceptionHandler' => __DIR__ . '/..' . '/symfony/debug/ExceptionHandler.php',
        'Symfony\\Component\\Debug\\Exception\\ClassNotFoundException' => __DIR__ . '/..' . '/symfony/debug/Exception/ClassNotFoundException.php',
        'Symfony\\Component\\Debug\\Exception\\ContextErrorException' => __DIR__ . '/..' . '/symfony/debug/Exception/ContextErrorException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalErrorException' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalErrorException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalThrowableError' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalThrowableError.php',
        'Symfony\\Component\\Debug\\Exception\\FlattenException' => __DIR__ . '/..' . '/symfony/debug/Exception/FlattenException.php',
        'Symfony\\Component\\Debug\\Exception\\OutOfMemoryException' => __DIR__ . '/..' . '/symfony/debug/Exception/OutOfMemoryException.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedFunctionException.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedMethodException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedMethodException.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\ClassNotFoundFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/ClassNotFoundFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\FatalErrorHandlerInterface' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/FatalErrorHandlerInterface.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedFunctionFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedMethodFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php',
        'Symfony\\Component\\Finder\\Comparator\\Comparator' => __DIR__ . '/..' . '/symfony/finder/Comparator/Comparator.php',
        'Symfony\\Component\\Finder\\Comparator\\DateComparator' => __DIR__ . '/..' . '/symfony/finder/Comparator/DateComparator.php',
        'Symfony\\Component\\Finder\\Comparator\\NumberComparator' => __DIR__ . '/..' . '/symfony/finder/Comparator/NumberComparator.php',
        'Symfony\\Component\\Finder\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/symfony/finder/Exception/AccessDeniedException.php',
        'Symfony\\Component\\Finder\\Exception\\DirectoryNotFoundException' => __DIR__ . '/..' . '/symfony/finder/Exception/DirectoryNotFoundException.php',
        'Symfony\\Component\\Finder\\Finder' => __DIR__ . '/..' . '/symfony/finder/Finder.php',
        'Symfony\\Component\\Finder\\Gitignore' => __DIR__ . '/..' . '/symfony/finder/Gitignore.php',
        'Symfony\\Component\\Finder\\Glob' => __DIR__ . '/..' . '/symfony/finder/Glob.php',
        'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/CustomFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/DateRangeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/DepthRangeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\FileTypeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/FileTypeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/FilecontentFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/FilenameFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\LazyIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/LazyIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\MultiplePcreFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/MultiplePcreFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\PathFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/PathFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\RecursiveDirectoryIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/RecursiveDirectoryIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/SizeRangeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\SortableIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/SortableIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\VcsIgnoredFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/VcsIgnoredFilterIterator.php',
        'Symfony\\Component\\Finder\\SplFileInfo' => __DIR__ . '/..' . '/symfony/finder/SplFileInfo.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit063b61b6938ab966ca6c2a435c73c153::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit063b61b6938ab966ca6c2a435c73c153::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit063b61b6938ab966ca6c2a435c73c153::$classMap;

        }, null, ClassLoader::class);
    }
}
