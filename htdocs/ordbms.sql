CREATE OR REPLACE TYPE FiguraGeometryczna
AS OBJECT(   
    id Number(7),
    Pole NUMBER(7),        
    Obwod NUMBER(7),        
    MEMBER PROCEDURE obliczObwod,       
    MEMBER PROCEDURE obliczPole,
    MEMBER FUNCTION getObwod RETURN NUMBER,
    MEMBER FUNCTION getPole RETURN NUMBER)NOT FINAL; 
    
CREATE TYPE BODY FiguraGeometryczna AS       
    MEMBER FUNCTION getObwod RETURN NUMBER IS       
        BEGIN 
            RETURN(Obwod);   
        END getObwod;    
    MEMBER FUNCTION getPole RETURN NUMBER IS       
        BEGIN 
            RETURN(Pole);     
        END getPole;
    MEMBER PROCEDURE obliczObwod IS
        BEGIN
         Obwod:=1;
        END obliczObwod;
    MEMBER PROCEDURE obliczPole IS
        BEGIN
         Pole:=1;
        END obliczPole;
END;

DROP TYPE FiguraGeometryczna; 

--------------------KWADRAT---------------------
CREATE OR REPLACE TYPE KwadratTyp UNDER FiguraGeometryczna(
    Bok NUMBER(7),
    OVERRIDING MEMBER PROCEDURE obliczObwod,
    OVERRIDING MEMBER PROCEDURE obliczPole);       

CREATE TYPE BODY KwadratTyp AS       
    OVERRIDING MEMBER PROCEDURE obliczPole IS       
        BEGIN 
            Pole := Bok*Bok;     
        END obliczPole;    
    OVERRIDING MEMBER PROCEDURE obliczObwod IS       
        BEGIN 
            Obwod := Bok*4;     
        END obliczObwod;
END;
           
CREATE TABLE KwadratObj OF KwadratTyp
(id PRIMARY KEY);

DROP TYPE KwadratTyp; 
-------------------PROSTOKĄT--------------------
CREATE OR REPLACE TYPE ProstokatTyp UNDER FiguraGeometryczna(
    Bok1 NUMBER(7),
    Bok2 NUMBER(7),
    OVERRIDING MEMBER PROCEDURE obliczObwod,
    OVERRIDING MEMBER PROCEDURE obliczPole);       

CREATE TYPE BODY ProstokatTyp AS       
    OVERRIDING MEMBER PROCEDURE obliczPole IS       
        BEGIN 
            Pole := Bok1*Bok2;     
        END obliczPole;    
    OVERRIDING MEMBER PROCEDURE obliczObwod IS       
        BEGIN 
            Obwod := Bok1*2 + Bok2*2;     
        END obliczObwod;
END;
       
CREATE TABLE ProstokatObj OF ProstokatTyp
(id PRIMARY KEY);

DROP TYPE ProstokatTyp; 
--------------------TRÓJKĄT---------------------
CREATE OR REPLACE TYPE TrojkatTyp UNDER FiguraGeometryczna(
    Bok1 NUMBER(7),
    Bok2 NUMBER(7),
    Bok3 NUMBER(7),
    OVERRIDING MEMBER PROCEDURE obliczObwod,
    OVERRIDING MEMBER PROCEDURE obliczPole);       

CREATE TYPE BODY TrojkatTyp AS       
    OVERRIDING MEMBER PROCEDURE obliczPole IS
         PolObw NUMBER(7);
        BEGIN 
           
            PolObw := (Bok1+Bok2+Bok3)/2;
            Pole := sqrt(
                PolObw*(PolObw-Bok1)*(PolObw-Bok2)*(PolObw-Bok3)
            );     
        END obliczPole;    
    OVERRIDING MEMBER PROCEDURE obliczObwod IS       
        BEGIN 
            Obwod := Bok1 + Bok2+Bok3;     
        END obliczObwod;
END;
            
CREATE TABLE TrojkatObj OF TrojkatTyp
(id PRIMARY KEY);

DROP TYPE TrojkatTyp;
----------------------KOŁO----------------------
CREATE OR REPLACE TYPE KoloTyp UNDER FiguraGeometryczna(
    Promien NUMBER(7),
    Srednica NUMBER(7),
    OVERRIDING MEMBER PROCEDURE obliczObwod,
    OVERRIDING MEMBER PROCEDURE obliczPole);       
/
CREATE TYPE BODY KoloTyp AS       
    OVERRIDING MEMBER PROCEDURE obliczPole IS
        BEGIN 
            Pole := 3.14*Promien*Promien;   
        END obliczPole;    
    OVERRIDING MEMBER PROCEDURE obliczObwod IS       
        BEGIN 
            Obwod :=  3.14*Promien*2;     
        END obliczObwod;
END;
/
            
CREATE TABLE KoloObj OF KoloTyp
(id PRIMARY KEY);

DROP TYPE KoloTyp;
-------------------PIĘCIOKĄT--------------------
CREATE OR REPLACE TYPE PieciokatTyp UNDER FiguraGeometryczna(
    Bok NUMBER(7),
    OVERRIDING MEMBER PROCEDURE obliczObwod,
    OVERRIDING MEMBER PROCEDURE obliczPole);       
/
CREATE TYPE BODY PieciokatTyp AS       
    OVERRIDING MEMBER PROCEDURE obliczPole IS       
        BEGIN 
            Pole := sqrt(25+10*sqrt(5))/4*Bok*Bok;     
        END obliczPole;    
    OVERRIDING MEMBER PROCEDURE obliczObwod IS       
        BEGIN 
            Obwod := Bok*5;     
        END obliczObwod;
END;
/
            
CREATE TABLE PieciokatObj OF PieciokatTyp
(id PRIMARY KEY);

DROP TYPE PieciokatTyp; 
------------------SZEŚCIOKAT--------------------

CREATE OR REPLACE TYPE SzesciokatTyp UNDER FiguraGeometryczna(
    Bok NUMBER(7),
    OVERRIDING MEMBER PROCEDURE obliczObwod,
    OVERRIDING MEMBER PROCEDURE obliczPole);       
/
CREATE TYPE BODY SzesciokatTyp AS       
    OVERRIDING MEMBER PROCEDURE obliczPole IS       
        BEGIN 
            Pole := (3*Bok*Bok*sqrt(3))/2;    
        END obliczPole;    
    OVERRIDING MEMBER PROCEDURE obliczObwod IS       
        BEGIN 
            Obwod := Bok*6;     
        END obliczObwod;
END;
/
            
CREATE TABLE SzesciokatObj OF SzesciokatTyp
(id PRIMARY KEY);

DROP TYPE SzesciokatTyp; 
---------------------------------------------