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

int yywrap(void){}

int main(){
    yylex();
    printf("Number of newlines : %d\n Number of spaces : %d\n Number of characters : %d\n",newlines,spaces,charR);
}
