<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4650c8b30c753a76bf44fb2ed00117d6f367490c',
    ),
    'illuminate/auth' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => '59d63d9dfda2836e8a75b4f1c6df8e2be3fb3909',
    ),
    'illuminate/cache' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6acac59f94c6362809b580918f7f3f6142d5796',
    ),
    'illuminate/console' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6e4708e6c6baaf92120848e885855ab3d76f30f',
    ),
    'illuminate/container' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b42e5ef939144b77f78130918da0ce2d9ee16574',
    ),
    'illuminate/contracts' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => '00fc6afee788fa07c311b0650ad276585f8aef96',
    ),
    'illuminate/database' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac9ae2d82b8a6137400f17b3eea258be3518daa9',
    ),
    'illuminate/filesystem' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => '494ba903402d64ec49c8d869ab61791db34b2288',
    ),
    'illuminate/http' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd0f549611de16b323af88478b441e4d52ceef40',
    ),
    'illuminate/queue' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => '36559f77916c16643bc614765db1e840d7bd9a00',
    ),
    'illuminate/session' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => '087d360f7b9d75bc964280b890c2f2fe8efaf71f',
    ),
    'illuminate/support' => 
    array (
      'pretty_version' => 'v5.8.36',
      'version' => '5.8.36.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df4af6a32908f1d89d74348624b57e3233eea247',
    ),
    'kkszymanowski/traitor' => 
    array (
      'pretty_version' => '0.2.5',
      'version' => '0.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9770fc7de72ff585601dc9c42b31715d9fc40a24',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.45.1',
      'version' => '2.45.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '528783b188bdb853eb21239b1722831e0f000a8d',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.10.4',
      'version' => '4.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6d052fc58cb876152f89f532b95a8d7907e7f0e',
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.6.1',
      'version' => '3.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '943b5d70cc5ae7483f6aff6ff43d7e34592ca0f5',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'santigarcor/laratrust' => 
    array (
      'pretty_version' => '5.0.0',
      'version' => '5.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '09393cae7b72b0038d23e68bb28ccb4510baabc4',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c98349bda966c70d6c08b4cd8658377c94166492',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '157bbec4fd773bae53c5483c50951a5530a2cc16',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5fa56b4074d1ae755beb55617ddafe6f5d78f665',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a191550d46b73a527b9d244f185fef439d41cf15',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c352647244bd376bf7d31efbd5401f13f50dad0c',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '84e23fdcd2517bf37aecbd16967e83f0caee25a7',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '2543795ab1570df588b9bbd31e1a2bd7037b94f6',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41db680a15018f9c1d4b23516059633ce280ca33',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '02d968647fe61b2f419a8dc70c468a9d30a48d3a',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f36548465489f293b05406f1770492f6efb8adb',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.2.4',
      'version' => '5.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5155d2fe14ef1eb150e3bdbbc1ec1455df95e9cd',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d63434d922daf7da8dd863e7907e67ee3031483',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '43a0283138253ed1d48d352ab6d0bdb3f809f248',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e950b6366d4da90292c2e7fa820b3c1842b965a',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd15da7ba4957ffb8f1747218be9e1a121fd298a1',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.4.20',
      'version' => '4.4.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '2271b6d577018a7dea75a9162a08ac84f8234deb',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2eaa60b558f26a4b0354e1bbb25636efaaad105',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.2.4',
      'version' => '5.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a81fec0628c468cf6d5c87a4d003725e040e223',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
