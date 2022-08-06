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
    'cakephp/core' => 
    array (
      'pretty_version' => '4.4.3',
      'version' => '4.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '884555efcf573ea23597f9c88a12ed6d58af00f3',
    ),
    'cakephp/database' => 
    array (
      'pretty_version' => '4.4.3',
      'version' => '4.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '25694dd69cbfa61a6b17674b76aa2accd1f779f9',
    ),
    'cakephp/datasource' => 
    array (
      'pretty_version' => '4.4.3',
      'version' => '4.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '2f890a6b8d8b33da2d26fcb486ecf5484d9ab014',
    ),
    'cakephp/utility' => 
    array (
      'pretty_version' => '4.4.3',
      'version' => '4.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '32866aac3d4fef7649fb524da6c59e14e7d18a0d',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '10dcfce151b967d20fde1b34ae6640712c3891bc',
    ),
    'graham-campbell/result-type' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a878d45c1914464426dc94da61c9e1d36ae262a8',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '14daed4296fae74d9e3201d2c4925d1acb7aa614',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.14.0',
      'version' => '4.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '34bea19b6e03d8153165d8f30bba4c3be86184c1',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77a32518733312af16a44300404e945338981de3',
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.6.3',
      'version' => '6.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9400f305a898f194caff5521f64e5dfa926626f3',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => 'v1.15.0',
      'version' => '1.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.15',
      'version' => '9.2.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '2e9da11878c4202f97915c1cb4bb1ca318a63f5f',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.6',
      'version' => '3.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.5.21',
      'version' => '9.5.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '0e32b76be457de00e83213528f6bb37e2a38fcb1',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef29f6d262798707a9edd554e2b82517ef3a9376',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8707bf3cea6f710bf6ef05491234e3ab06f6432a',
    ),
    'robmorgan/phinx' => 
    array (
      'pretty_version' => '0.12.12',
      'version' => '0.12.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a6ce1e7fdf0fa4e602ba5875b5bc9442ccaa115',
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.6',
      'version' => '4.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f4261989e546dc112258c7a75935a81a7ce382',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.4',
      'version' => '5.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b5dff7bb151a4db11d49d90e5408e4e938270f7',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '65e8b7db476c5dd267e65eea9cab77584d3cfff9',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.5',
      'version' => '5.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ca8db5a5fc9c8646244e629625ac486fa286bf2',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b233b84bc4465aff7b57cf1c4bc75c86d00d6dad',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '956d4ec5df274dda91a4cedfccc2bfd063f6f649',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '09b8e50f09bf0e5bbde9b61b19d7f53751114725',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '33787a6b6e055245d5710697dfc4a9a2b896c032',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '433d05519ce6990bf3530fba6957499d327395c2',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cfa0ae98841b9e461207c13ab093d76b0fa7bace',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '13f6d1271c663dc5ae9fb843a8f16521db7687a1',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd78d39c1599bd1188b8e26bb341da52c3c6d8a66',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '042b6bf0f6ccca6d456a0572eb788cfb8b1ff809',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v5.4.1',
      'version' => '5.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '264dce589e7ce37a7ba99cb901eed8249fbec92f',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
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
