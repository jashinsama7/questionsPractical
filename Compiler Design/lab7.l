%{
#include <stdio.h>
%}

%%
\/\/(.*) {};
\/\*(.*\n).*\*\/ {};
%%

int yywrap(void){}

int main(int k,char ** args){

extern FILE *yyin,*yyout;

yyin = fopen(args[1],"r");
yyout = fopen("output.txt","w");
yylex()'
}
