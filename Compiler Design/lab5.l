%{
# include <stdio.h>

int newlines = 0;
int spaces = 0;
int charR = 0;
%}

%%
[\n] {newlines++;}
[ ]  {spaces++;}
. {charR++;}
%%

int yywrap(){}

int main(){

extern FILE * yyin;
yyin = fopen("new.txt","r");
yylex();
printf("Number of newlines : %d\n Number of spaces : %d\n Number of characters : %d\n",newlines,spaces,charR);
}


