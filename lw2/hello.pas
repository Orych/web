PROGRAM PrintHello(INPUT, OUTPUT);
USES
  DOS;
VAR
  W1, W2, W3, W4, Looking: CHAR;
  QUERY: STRING;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('Hello world!');
  WRITELN(GetEnv('REQUEST_METHOD'));
  WRITELN(GetEnv('QUERY_STRING'));
  WRITELN(GetEnv('CONTENT_LENGTH'));
  WRITELN(GetEnv('HTTP_USER_AGENT'));
  WRITELN(GetEnv('HTTP_HOST'));
  Query := GetENV('QUERY_STRING');
  {Read Lanterns}
  {Issue Paul Revere's message}
  IF Query = 'Lanterns=1'
  THEN
    WRITELN('land.')
  ELSE
    IF Query = 'Lanterns=2'
    THEN
      WRITELN('sea.')



END. {PrintHello}
