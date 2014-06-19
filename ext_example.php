<?hh
<<__Native>>
function example_sum(int $a, int $b): int;

function logit() {
  $log = new Monolog\Logger('ext_exmaple');
  $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

  $log->addWarning('Foo');
}
