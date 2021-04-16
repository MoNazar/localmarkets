# localmarkets
important templates for the localmarkets project

1. Building a registration Mask (done)
   Registrationmask.html; registrate.php are needed in order to create a input mask and publish its entries. 
   
2. Building a Container and fill with database Product entries. (NEXT MILESTONE)
   - We need a Grid (MainGrid, Productgrid) where the products should be load into. 
   - for each product, a Grid in Grid is needed in order to display to product details. 
   - by pressing the search button, the $Post containment of the textfield should fill the productgrid with all products located in the database. 

2.1. Backend of Container
   - Database relation "Product" is needed in order to save: ProductName; Productdescription; Price; Photo; rate
   - php function in order to connect to the database 
   - php function getproducts($Post) => Input is containment of the textfield and Output are all products which contain the word in the textfield. 

2.2. Frontend of Container 
   - a CSS Grid(Productgrid) is required in order to load all products into that grid. 
   - a .cssdesign (layout for produtdesign)
