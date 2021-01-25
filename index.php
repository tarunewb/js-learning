<html>

<head>
    <title>Simple Page</title>
</head>

<body>


    <script>
        let body = document.body;
        header = document.createElement('header');
        header.setAttribute('class', 'header');

        header.style.cssText = "background:red;width:100%;display:inline-block"

        //  create a header
        logo = document.createElement('div');
        logo.setAttribute('class', 'logo');
        logo.style.cssText = "width:50%;display:inline-block;float:left";
        image = document.createElement('img');
        image.setAttribute('src', 'download.png');
        image.setAttribute('alt', 'images')
        image.setAttribute('height', '50px')
        image.setAttribute('width', '50px')
        menu = document.createElement('div');
        menu.setAttribute('class', 'menuSection');
        menu.style.width = "50%";


        menuList = document.createElement('ul');
        menuList.setAttribute('class', "allMenu");
        List = document.createElement('li');

        t = document.createTextNode('home');
        menu.style.float = 'Right'


        // create a content area
        let mainSection = document.createElement('div');
        mainSection.setAttribute('id', 'main')
        mainSection.style.backgroundImage = "url(https://www.geeklawblog.com/wp-content/uploads/sites/528/2018/12/liprofile-656x369.png)";
        mainSection.style.color = "white";
        heading = document.createElement('h1');
        text = document.createTextNode('This is heading')
        p = document.createElement('p')
        ptext = document.createTextNode("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,")
        //create a button
        let button = document.createElement('button')
        button.setAttribute('type', "button")
        button.setAttribute('id', "btn");
        button.setAttribute('value', "submit");
        button.style.cssText = "width:8%;background:yellow;height:20px"
        // document.getElementById('btn').style.cssText="width:50%;background:red"
        document.body.appendChild(header);
        header.appendChild(logo);
        logo.appendChild(image)
        header.appendChild(menu)

        menu.appendChild(menuList);
        menuList.appendChild(List);
        List.appendChild(t);
        document.body.appendChild(mainSection);
        mainSection.appendChild(heading);
        heading.appendChild(text)
        p.appendChild(ptext);
        mainSection.appendChild(p)
        mainSection.appendChild(button)
    </script>

    </script>
</body>

</html>