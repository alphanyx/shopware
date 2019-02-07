<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8eb3b970c54cf6469412739e6f384e6
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        '_' => 
        array (
            '_PhpScoper5c52a41b78b7a\\Tests\\' => 30,
            '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\' => 41,
            '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\' => 40,
            '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\' => 43,
            '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\' => 35,
            '_PhpScoper5c52a41b78b7a\\Composer\\CaBundle\\' => 42,
        ),
        'M' => 
        array (
            'Mollie\\Api\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '_PhpScoper5c52a41b78b7a\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        '_PhpScoper5c52a41b78b7a\\Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Mollie\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Mollie\\Api\\CompatibilityChecker' => __DIR__ . '/../..' . '/src/CompatibilityChecker.php',
        'Mollie\\Api\\Endpoints\\ChargebackEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ChargebackEndpoint.php',
        'Mollie\\Api\\Endpoints\\CustomerEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/CustomerEndpoint.php',
        'Mollie\\Api\\Endpoints\\CustomerPaymentsEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/CustomerPaymentsEndpoint.php',
        'Mollie\\Api\\Endpoints\\EndpointAbstract' => __DIR__ . '/../..' . '/src/Endpoints/EndpointAbstract.php',
        'Mollie\\Api\\Endpoints\\InvoiceEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/InvoiceEndpoint.php',
        'Mollie\\Api\\Endpoints\\MandateEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/MandateEndpoint.php',
        'Mollie\\Api\\Endpoints\\MethodEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/MethodEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderLineEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderLineEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderPaymentEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderPaymentEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrderRefundEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrderRefundEndpoint.php',
        'Mollie\\Api\\Endpoints\\OrganizationEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/OrganizationEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentCaptureEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentCaptureEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentChargebackEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentChargebackEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentEndpoint.php',
        'Mollie\\Api\\Endpoints\\PaymentRefundEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PaymentRefundEndpoint.php',
        'Mollie\\Api\\Endpoints\\PermissionEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/PermissionEndpoint.php',
        'Mollie\\Api\\Endpoints\\ProfileEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ProfileEndpoint.php',
        'Mollie\\Api\\Endpoints\\ProfileMethodEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ProfileMethodEndpoint.php',
        'Mollie\\Api\\Endpoints\\RefundEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/RefundEndpoint.php',
        'Mollie\\Api\\Endpoints\\SettlementsEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/SettlementsEndpoint.php',
        'Mollie\\Api\\Endpoints\\ShipmentEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/ShipmentEndpoint.php',
        'Mollie\\Api\\Endpoints\\SubscriptionEndpoint' => __DIR__ . '/../..' . '/src/Endpoints/SubscriptionEndpoint.php',
        'Mollie\\Api\\Exceptions\\ApiException' => __DIR__ . '/../..' . '/src/Exceptions/ApiException.php',
        'Mollie\\Api\\Exceptions\\IncompatiblePlatform' => __DIR__ . '/../..' . '/src/Exceptions/IncompatiblePlatform.php',
        'Mollie\\Api\\MollieApiClient' => __DIR__ . '/../..' . '/src/MollieApiClient.php',
        'Mollie\\Api\\Resources\\BaseCollection' => __DIR__ . '/../..' . '/src/Resources/BaseCollection.php',
        'Mollie\\Api\\Resources\\BaseResource' => __DIR__ . '/../..' . '/src/Resources/BaseResource.php',
        'Mollie\\Api\\Resources\\Capture' => __DIR__ . '/../..' . '/src/Resources/Capture.php',
        'Mollie\\Api\\Resources\\CaptureCollection' => __DIR__ . '/../..' . '/src/Resources/CaptureCollection.php',
        'Mollie\\Api\\Resources\\Chargeback' => __DIR__ . '/../..' . '/src/Resources/Chargeback.php',
        'Mollie\\Api\\Resources\\ChargebackCollection' => __DIR__ . '/../..' . '/src/Resources/ChargebackCollection.php',
        'Mollie\\Api\\Resources\\CurrentProfile' => __DIR__ . '/../..' . '/src/Resources/CurrentProfile.php',
        'Mollie\\Api\\Resources\\CursorCollection' => __DIR__ . '/../..' . '/src/Resources/CursorCollection.php',
        'Mollie\\Api\\Resources\\Customer' => __DIR__ . '/../..' . '/src/Resources/Customer.php',
        'Mollie\\Api\\Resources\\CustomerCollection' => __DIR__ . '/../..' . '/src/Resources/CustomerCollection.php',
        'Mollie\\Api\\Resources\\Invoice' => __DIR__ . '/../..' . '/src/Resources/Invoice.php',
        'Mollie\\Api\\Resources\\InvoiceCollection' => __DIR__ . '/../..' . '/src/Resources/InvoiceCollection.php',
        'Mollie\\Api\\Resources\\Issuer' => __DIR__ . '/../..' . '/src/Resources/Issuer.php',
        'Mollie\\Api\\Resources\\IssuerCollection' => __DIR__ . '/../..' . '/src/Resources/IssuerCollection.php',
        'Mollie\\Api\\Resources\\Mandate' => __DIR__ . '/../..' . '/src/Resources/Mandate.php',
        'Mollie\\Api\\Resources\\MandateCollection' => __DIR__ . '/../..' . '/src/Resources/MandateCollection.php',
        'Mollie\\Api\\Resources\\Method' => __DIR__ . '/../..' . '/src/Resources/Method.php',
        'Mollie\\Api\\Resources\\MethodCollection' => __DIR__ . '/../..' . '/src/Resources/MethodCollection.php',
        'Mollie\\Api\\Resources\\MethodPrice' => __DIR__ . '/../..' . '/src/Resources/MethodPrice.php',
        'Mollie\\Api\\Resources\\MethodPriceCollection' => __DIR__ . '/../..' . '/src/Resources/MethodPriceCollection.php',
        'Mollie\\Api\\Resources\\Order' => __DIR__ . '/../..' . '/src/Resources/Order.php',
        'Mollie\\Api\\Resources\\OrderCollection' => __DIR__ . '/../..' . '/src/Resources/OrderCollection.php',
        'Mollie\\Api\\Resources\\OrderLine' => __DIR__ . '/../..' . '/src/Resources/OrderLine.php',
        'Mollie\\Api\\Resources\\OrderLineCollection' => __DIR__ . '/../..' . '/src/Resources/OrderLineCollection.php',
        'Mollie\\Api\\Resources\\Organization' => __DIR__ . '/../..' . '/src/Resources/Organization.php',
        'Mollie\\Api\\Resources\\OrganizationCollection' => __DIR__ . '/../..' . '/src/Resources/OrganizationCollection.php',
        'Mollie\\Api\\Resources\\Payment' => __DIR__ . '/../..' . '/src/Resources/Payment.php',
        'Mollie\\Api\\Resources\\PaymentCollection' => __DIR__ . '/../..' . '/src/Resources/PaymentCollection.php',
        'Mollie\\Api\\Resources\\Permission' => __DIR__ . '/../..' . '/src/Resources/Permission.php',
        'Mollie\\Api\\Resources\\PermissionCollection' => __DIR__ . '/../..' . '/src/Resources/PermissionCollection.php',
        'Mollie\\Api\\Resources\\Profile' => __DIR__ . '/../..' . '/src/Resources/Profile.php',
        'Mollie\\Api\\Resources\\ProfileCollection' => __DIR__ . '/../..' . '/src/Resources/ProfileCollection.php',
        'Mollie\\Api\\Resources\\Refund' => __DIR__ . '/../..' . '/src/Resources/Refund.php',
        'Mollie\\Api\\Resources\\RefundCollection' => __DIR__ . '/../..' . '/src/Resources/RefundCollection.php',
        'Mollie\\Api\\Resources\\ResourceFactory' => __DIR__ . '/../..' . '/src/Resources/ResourceFactory.php',
        'Mollie\\Api\\Resources\\Settlement' => __DIR__ . '/../..' . '/src/Resources/Settlement.php',
        'Mollie\\Api\\Resources\\SettlementCollection' => __DIR__ . '/../..' . '/src/Resources/SettlementCollection.php',
        'Mollie\\Api\\Resources\\Shipment' => __DIR__ . '/../..' . '/src/Resources/Shipment.php',
        'Mollie\\Api\\Resources\\ShipmentCollection' => __DIR__ . '/../..' . '/src/Resources/ShipmentCollection.php',
        'Mollie\\Api\\Resources\\Subscription' => __DIR__ . '/../..' . '/src/Resources/Subscription.php',
        'Mollie\\Api\\Resources\\SubscriptionCollection' => __DIR__ . '/../..' . '/src/Resources/SubscriptionCollection.php',
        'Mollie\\Api\\Types\\InvoiceStatus' => __DIR__ . '/../..' . '/src/Types/InvoiceStatus.php',
        'Mollie\\Api\\Types\\MandateMethod' => __DIR__ . '/../..' . '/src/Types/MandateMethod.php',
        'Mollie\\Api\\Types\\MandateStatus' => __DIR__ . '/../..' . '/src/Types/MandateStatus.php',
        'Mollie\\Api\\Types\\OrderLineStatus' => __DIR__ . '/../..' . '/src/Types/OrderLineStatus.php',
        'Mollie\\Api\\Types\\OrderLineType' => __DIR__ . '/../..' . '/src/Types/OrderLineType.php',
        'Mollie\\Api\\Types\\OrderStatus' => __DIR__ . '/../..' . '/src/Types/OrderStatus.php',
        'Mollie\\Api\\Types\\PaymentMethod' => __DIR__ . '/../..' . '/src/Types/PaymentMethod.php',
        'Mollie\\Api\\Types\\PaymentStatus' => __DIR__ . '/../..' . '/src/Types/PaymentStatus.php',
        'Mollie\\Api\\Types\\ProfileStatus' => __DIR__ . '/../..' . '/src/Types/ProfileStatus.php',
        'Mollie\\Api\\Types\\RefundStatus' => __DIR__ . '/../..' . '/src/Types/RefundStatus.php',
        'Mollie\\Api\\Types\\SequenceType' => __DIR__ . '/../..' . '/src/Types/SequenceType.php',
        'Mollie\\Api\\Types\\SettlementStatus' => __DIR__ . '/../..' . '/src/Types/SettlementStatus.php',
        'Mollie\\Api\\Types\\SubscriptionStatus' => __DIR__ . '/../..' . '/src/Types/SubscriptionStatus.php',
        '_PhpScoper5c52a41b78b7a\\Composer\\CaBundle\\CaBundle' => __DIR__ . '/..' . '/composer/ca-bundle/src/CaBundle.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        '_PhpScoper5c52a41b78b7a\\GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        '_PhpScoper5c52a41b78b7a\\Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\API\\Exceptions\\ApiExceptionTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Exceptions/ApiExceptionTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\API\\Types\\MandateMethodTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Types/MandateMethodTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\CompatibilityCheckerTest' => __DIR__ . '/../..' . '/tests/Mollie/API/CompatibilityCheckerTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\BaseEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/BaseEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\ChargebackEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/ChargebackEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\CustomerEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/CustomerEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\CustomerPaymentEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/CustomerPaymentEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\InvoiceEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/InvoiceEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\MandateEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/MandateEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\MethodEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/MethodEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\OrderEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/OrderEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\OrderLineEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/OrderLineEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\OrderPaymentEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/OrderPaymentEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\OrderRefundEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/OrderRefundEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\OrganizationEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/OrganizationEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\PaymentCaptureEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/PaymentCaptureEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\PaymentChargebackEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/PaymentChargebackEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\PaymentEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/PaymentEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\PaymentRefundEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/PaymentRefundEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\PermissionEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/PermissionEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\ProfileEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/ProfileEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\ProfileMethodEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/ProfileMethodEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\RefundEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/RefundEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\SettlementEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/SettlementEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\ShipmentEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/ShipmentEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Endpoints\\SubscriptionEndpointTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Endpoints/SubscriptionEndpointTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\MollieApiClientTest' => __DIR__ . '/../..' . '/tests/Mollie/API/MollieApiClientTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\InvoiceTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/InvoiceTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\OrderLineCollectionTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/OrderLineCollectionTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\OrderLineTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/OrderLineTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\OrderTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/OrderTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\PaymentTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/PaymentTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\ProfileTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/ProfileTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\RefundTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/RefundTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\ResourceFactoryTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/ResourceFactoryTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\SettlementTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/SettlementTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\ShipmentTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/ShipmentTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\Api\\Resources\\SubscriptionTest' => __DIR__ . '/../..' . '/tests/Mollie/API/Resources/SubscriptionTest.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\TestHelpers\\AmountObjectTestHelpers' => __DIR__ . '/../..' . '/tests/Mollie/TestHelpers/AmountObjectTestHelpers.php',
        '_PhpScoper5c52a41b78b7a\\Tests\\Mollie\\TestHelpers\\LinkObjectTestHelpers' => __DIR__ . '/../..' . '/tests/Mollie/TestHelpers/LinkObjectTestHelpers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8eb3b970c54cf6469412739e6f384e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8eb3b970c54cf6469412739e6f384e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite8eb3b970c54cf6469412739e6f384e6::$classMap;

        }, null, ClassLoader::class);
    }
}
