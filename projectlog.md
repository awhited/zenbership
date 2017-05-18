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
  * Stripe is integrated and untested. Waiting on shop development

### 5/9/2017  
2 hrs
* Worked with blaise  
* search a folder for a phrase  
  * grep -rnw 'path' -e 'search pattern'  
  * search in sublime


### 5/16/2017  
4 hrs
2:00 - 6:00
* Combed through SQL database to find  
  * where manage_home.php is called from  
  * how custom pages are put in  
  * got more intimate with templates. ppSD_template  
    * ppSD_template in sql  
    * cp-classes/template.class.php 
      * template handles user data from the db and updates it on page load using $datain['identifier'] to hold the most recent version of the user data.
        user data 
      * the '%thing%' is handled upon changes to a template. make_changes() in template.class.php  
        * $changes is an array 

### 5/17/2017  

5:30pm  
No sleep last night...Lets see how this goes 
It didn't go well  

### 5/18/2017
5 hrs
1:00pm - 6:00pm 

* created a google keep label of to-do's

* possible routes of page creation are widget and template. widget and template both extend db  
  * Widget will make it incredibly easy to insert "using widget notation" and keep the current file structure on the pp side, just need to figure out % subs. and how they work for widgets - done
  * Template may be necessary.  
  * Both have user data handling
  * I've decided I will most likely make a widget for the video library

* created pp-templates/html/zoid/js/wistia_functions.js to handle wistia api on the pp side. added to generic footer

* read through db.class.php to become familiar with the sql operations  

* spent time understanding three example widgets "featured_product", "member spotlight", and "upcoming_events" and their ties with sql  
  * ties with sql - widgets are allowed to use %thing% because they are loaded into "$content" at the very begining of "make_changes()" in the template class. since the widget is contained within a template and its contents are added before any changes are made. the widget becomes part of the template.  
  * important widget types - widget.class.php  
    * html - contents stored in sql db. used for menus and stuff  
    * code | plugin - contents stored as a file in /custom/widgets/*.php  
      * procedure to load widget - run_code()  
        * ob_start - buffers all output to ob.  
        * include the php file  
        * ob_get_contents - output results of the php file  
        * ob_end_clean() - get rid of the buffer and resume normal output  
* user data can contain a membership level variable which we can use for wistia integration based on subscription level. "What videos are a person at this level allowed to watch?"










