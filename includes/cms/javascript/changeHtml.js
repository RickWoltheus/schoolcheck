function changeHtml(img) 
{
   if(img.src.match(/blank/)) img.src = "black.jpg";
   else img.src = "blank.jpg";
}