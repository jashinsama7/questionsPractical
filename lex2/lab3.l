%{
#include <stdio.h>
%}

%%
[0-9]+ {printf("Integer");}
[0-9]+[.][0-9]+ {printf("Float");}
.* {printf("Invalid Number");}
%%

int yywrap(void){}

int main(){

printf("Enter a number : \n");
yylex();

}
