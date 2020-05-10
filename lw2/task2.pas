PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
VAR
  Query: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  IF Query = 'Lanterns=1'
  THEN
    WRITELN('British are coming by land')
  else
    IF Query = 'Lanterns=2'
    THEN
      WRITELN('British are coming by  sea')
    else
      WRITELN('Sarah did not say')
END.
