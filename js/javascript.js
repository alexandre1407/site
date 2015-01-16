function verifForm()
{
   if (document.getElementById('mdp').value=='' || document.getElementById('email').value=='')
   {
   alert("tous les elements ne sont pas remplis");
   return false;
   } else {
   
   return true;
   }

   }
   
  