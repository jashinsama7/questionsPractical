%{
#include <stdio.h>
%}

reg [a|b][a|b][a](a|b)*

%%

{reg}  {printf("%s Accepted");}
.*     {printf("%s Not Accepted");}
%%

int yywrap(void){};

int main()
{
printf("Enter the expression : \n");
yylex();
}
