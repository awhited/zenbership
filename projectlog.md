# Project Log  
### 4/12/2017  
3 hrs  
Read Wistia API  
began project log  
started on custom login screen/custom user content  

### 5/3/2017
6 hrs  
12:30pm - 5:30pm
* Continue work on custom user content  
  * loader loads all templates and classes in pp-templates/html/zoid and admin/cp-classes  
  * widgets
    * Define a widget and use its inclusion code "{-name_of_widget-}" to summon it
    * since content is generated dynamically, these hook in nicely with html
  * template class loads header, content, and footer  
  * I'm going to have to play ball with this CMS in order to keep the db up to date  

6:00pm - 7:00pm   

Decision: Shop and Library Solution  
  * How TF does this thing work and how much of it do we have to use

Note: Users will be given the option to make a Free account then buy a product which upgrades their account and gives them access to another level of content.  
* Started on stripe payment
  * Installed development SSL cert using letsencrypt/certbot
  * Stripe account pass: TallyH03!
  * Stripe is integrated and untested. Waiting on shop solution
