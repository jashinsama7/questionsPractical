%{
#include<stdio.h>
%}


%%
[auto|double|int|struct|break|else|long|switch|case|enum|register|typedef|char|extern|return|union|continue|for|signed|void|do|if|static|while|default|goto|sizeof|volatile|const|float|short] {printf("\nKEYWORD\n");}
[{};,()]   {printf("\tSEPERATOR\t");}						

[+-/=*%]   {printf("\tOPERATOR\t");}						

[a-z|A-Z|_][a-z|A-Z|_|0-9]* {printf("\tIdentifier\t");}    

.|\n ; 															
%%


int yywrap(void){}



int main()
{
printf("Enter the c Code : \n");
yylex();

}
