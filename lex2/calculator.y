%{
#include <stdio.h>
#include <stdlib.h>
int yylex(void);
int yyerror(char*s);
%}

%token NUMBER ALPHA 
%left '+' '-'
%left '*' '/'
%left '(' ')'
 
%%

grammer: expr '\n' {
printf("\n Arithematic Expression is Valid.");
printf("\n Expression Result : %d\n",$$);
exit(0);
}

expr : expr'+'expr {$$ = $1 + $3;} 
     | expr'*'expr {$$ = $1 * $3;}
     | expr'/'expr {$$ = $1 / $3;}
     | expr'-'expr {$$ = $1 - $3;}
     | '('expr')'  {$$ = $2;}
     | NUMBER      {$$ = $1;}
     | ALPHA 
     ;
     
%%

int main(void){

printf("Enter the Arithematic Expression : ");
yyparse();
return 0;
}


int yyerror(char*s){

printf("Arthematic Expression is Invalid ");
exit(1);
return 1;
}





