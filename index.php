<html>

<head>
    <title>Simple Page</title>
</head>

<body>


    <script>
        // let body = document.body;
      let  header = document.createElement('header');
               header.setAttribute('class', 'header');

                   header.style.cssText = "background:#003676;width:100%;display:inline-block;color:white"
        document.body.appendChild(header);
        //  create a header
        logo = document.createElement('div');
             logo.setAttribute('class', 'logo');
              logo.style.cssText = "width:50%;display:inline-block;float:left";
              header.appendChild(logo);//apend logo into header


        image = document.createElement('img');
            image.setAttribute('src', 'download.jpg');
            image.setAttribute('alt', 'images')
            image.setAttribute('height', '100px')
            image.setAttribute('width', '100px')

            logo.appendChild(image) //apend logo-image into logo div
        menu = document.createElement('div');
             menu.setAttribute('class', 'menuSection');
             menu.style.width = "50%";
             menu.style.float = 'Right'

             header.appendChild(menu)

        menuList = document.createElement('ul');
               menuList.setAttribute('class', "allMenu");
             menu.appendChild(menuList);
          
        List = document.createElement('li');
               menuList.appendChild(List);
                
         t = document.createTextNode('home');
               List.appendChild(t);

        // create a content area
        let mainSection = document.createElement('div');
                    mainSection.setAttribute('id', 'main')
                    mainSection.style.backgroundImage = "url(https://www.geeklawblog.com/wp-content/uploads/sites/528/2018/12/liprofile-656x369.png)";
                    mainSection.style.color = "white";
                    mainSection.style.margin = "0px";
                    document.body.appendChild(mainSection);
           heading = document.createElement('h1');
           mainSection.appendChild(heading);
           text = document.createTextNode('This is heading');
           heading.appendChild(text)
            p = document.createElement('p')
            p.style.cssText="padding:2px 8px 7px 12px;font-Size:18px;line-Height:2.5rem";
            mainSection.appendChild(p)
             ptext = document.createTextNode("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,")
               
             p.appendChild(ptext);
             //create a button
        let button = document.createElement('button')
              button.setAttribute('type', "button")
             button.setAttribute('id', "btn");
             button.setAttribute('value', "submit");
              button.style.cssText = "width:60px;background:white;height:35px;padding:3px 3px 2px 4px;margin:7px 8px;w"
           btnValue=document.createTextNode('submit')
           mainSection.appendChild(button) 
           button.appendChild(btnValue)
        // document.getElementById('btn').style.cssText="width:50%;background:red"
        
     
       
      

       
    
    
     
     
      
      
  
      
    </script>

    </script>
</body>

</html>