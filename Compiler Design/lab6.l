%{
#include <stdio.h>
%}

%%
[\t " "] {fprintf(yyout," ");}
.|\n {fprintf(yyout,"%s",yytext);}
%%

int yywrap(void){}

void main(){
extern FILE *yyin, *yyout;
yyin= fopen("new.txt","r");
yyout = fopen("write.txt","w");

yylex();
}
