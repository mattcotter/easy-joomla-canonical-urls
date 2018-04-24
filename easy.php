<!doctype html>
    <head>
        <jdoc:include type="head" />
        <?php 
			// get menu item
            $menu   = JFactory::getApplication()->getMenu();
            
            // easy output
            // here's your default URL
            $root = 'http://example.com';

            // now request current url and parse it to leave everything AFTER '*.com/'
            $request = parse_url($_SERVER['REQUEST_URI']);
            $path = $request["path"];
            $path = rtrim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');

            //output canonical link
            echo '<link rel="canonical" href="' . $root . $path . '">';

            
            
            // EXAMPLES
			// how to check for parent menu item ID; replace '0' w/ menu item's ID
			if ($menu->getActive()->parent_id == 0) {
				
                // ...
				
            }
            
            // how to check for active ID; replace '0' w/ menu item's ID
            if ($menu->getActive()->id == 319) {
				
				// ...
				
            }

            
		?>
    </head>
    <body>
    
    </body>
</html>