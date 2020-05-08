PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
VAR
  Key: String;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
  VAR
    I: INTEGER;
    Str: String;
  BEGIN
  Str := GetEnv('QUERY_STRING');
  IF POS(Key, Str) = 1
  THEN
    BEGIN
      I := LENGTH(Str) - LENGTH(Key) - 1;
      GetQueryStringParameter := COPY(Str, LENGTH(Key) + 2, I);
    END
  ELSE
    GetQueryStringParameter := 'error key'
  END;

BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN(GetQueryStringParameter('name'))
END.
