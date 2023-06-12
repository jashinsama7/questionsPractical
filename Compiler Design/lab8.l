%{
#include <stdio.h>
%}

%%
"<"[^>]*> fprintf(yyout,"%s\n",yytext);
.|\n ;

%%

int yywrap(void){}

int main(int k,char ** args){

extern FILE *yyin,*yyout;

yyin = fopen(args[1],"r");
yyout = fopen("outHtml.txt","w");
yylex();

}
