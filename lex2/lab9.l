%{
#include <stdio.h>
%}

reg (aa|bb|(ab|ba)(aa|bb)*(ab|ba))*

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
