# PHP_MVC_BOARD
MVC 패턴의 간단한 게시판

/** 폴더 구조 **/

MIA_PHP

app

>  -controller
 
>  -model
 
>  -view
 
 
 
config


include

>  -css
  
>  -img
  
>  -js
    
app 폴더 안에 MVC 폴더 구성
config 폴더 안에는 애플리케이션이 실행 될 때 필요한 환경설정이 구성되어 있음
include 폴더 안에는 화면을 구성하는 css, img, js 등의 static 파일이 들어있음

model과 controller에서 사용되는 객체의 네이밍은 Model 혹은 Model_ModelNameDetail / Controller 혹은 Controller_ControllerNameDetail
과 같이 _ 로 구분해서 작성
