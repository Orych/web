PROGRAM PrintHello(INPUT, OUTPUT);
USES
  DOS;
VAR
  W1, W2, W3, W4, Looking: CHAR;
  QUERY: STRING;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN(GetEnv('REQUEST_METHOD'));
  WRITELN;
  WRITELN(GetEnv('QUERY_STRING'));
  WRITELN;
  WRITELN(GetEnv('CONTENT_LENGTH'));
  WRITELN;
  WRITELN(GetEnv('HTTP_USER_AGENT'));
  WRITELN;
  WRITELN(GetEnv('HTTP_HOST'));
  WRITELN;
  Query := GetENV('QUERY_STRING');
  {Read Lanterns}
  {Issue Paul Revere's message}
  IF Query <> ''
  THEN
    WRITELN('HELLO DEAR', Query)
  ELSE
    WRITELN('HELLOI ANONYMUS')



END. {PrintHello}
