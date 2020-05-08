PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
VAR
  IString, IName: STRING;
  I: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IString := GetEnv('QUERY_STRING');
  IF POS('name=', IString) = 1
  THEN
    BEGIN
      IF POS('&', IString) > 0
      THEN
        I := INTEGER(POS('&', IString)) - 6
      ELSE
        I := LENGTH(IString) - 5;
      IName := COPY(IString, 6, I);
      WRITELN('HELLO DEAR ', IName, '!')
    END
  ELSE
    WRITELN('HELLO ANONYMUS!')
END.
