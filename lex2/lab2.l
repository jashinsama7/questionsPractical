%{
#include <stdio.h>
%}

%%
[a-z|A-Z|_][a-z|A-Z|_|0-9]* {printf("Valid Identifier!");}

.* {printf("Invalid Identifier!");}
%%

int yywrap(void){}

int main(){
    printf("Enter the Identifier : \n");
    yylex();

}
