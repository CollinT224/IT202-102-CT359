<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Collin Tully (ct359)</td></tr>
<tr><td> <em>Generated: </em> 5/8/2023 3:27:41 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/it202-milestone-2-shop-project/grade/ct359" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236760326-bb3e9a99-6144-406a-a26e-8067edb721af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Make a product<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236760578-ae66efbc-c888-439c-bfcc-ffb2d33d9e4b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Populated productstable<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>Product information is inserted into the text boxes on the html page. POST<br>request is sent to the database. Error checking is done to ensure there<br>isn&#39;t issues with the submitted data.&nbsp; A try catch statement is used to<br>handle exceptions and inserts the data into the database displaying a flash message<br>if it is either successful or not.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236759036-223b9532-6a23-47c8-9a5d-b6820fca266a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shops on the product page<br></p>
</td></tr>
<tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236759239-94aeadfd-3077-4dd9-a779-995b251511a5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filter for sketch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236759511-1b57163c-3012-4606-8b74-0f87e97711b6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filter for essay<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236760005-c767eef3-4d86-4018-8beb-a7b1f6cecc92.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Filter code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>Results are shown by comparing the entered filter variable to the name in<br>the database.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236761272-b9bd95c7-ad43-4f7e-a8f2-a7bca984b846.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin shop owner product list<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>The check is made on the nav.php file to only permit users registered<br>in the user roles as admin to view this page.&nbsp; The nav page<br>checks the user roles data to see if a user is flagged as<br>admin. If they are then they have access to admin pages. As for<br>viewing the data the data from the table is displayed including information not<br>typically displayed to the user.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236756950-277ebf2d-daf5-4175-9b66-67265bc39f65.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin owner layout of the shop.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236756950-277ebf2d-daf5-4175-9b66-67265bc39f65.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Resubmitting the same name should update the product accordingly<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236757352-9de76620-0aeb-4ff5-a42e-817f3845d22e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Edit product lists page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236757352-9de76620-0aeb-4ff5-a42e-817f3845d22e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236757626-1e8c1ebc-1ab7-4729-8bad-7c8b4de3a107.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The edit products brings you to the edit product page which is currently<br>not entirely functional the update to the database was not working. I attempted<br>to reuse the same logic found in the initial entry to the database<br>but it was unsuccessful with the PHP code.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>Description was added to the items of the cart the product details page<br>doesn&#39;t exist I had issues displaying a single product on a webpage and<br>having it display a different product depending on what was clicked.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236755349-cfffe7c0-a798-40f3-8aee-5c16ac16c08b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Item is added to the cart and success message displayed<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236755603-6b81faa4-4b24-42af-9d14-12e74a54c38c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Unable to access shop if not logged in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236755827-b5f92a2f-c930-43ea-80e0-06cb9ee78ca5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cart data with table in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>The cart is only stored locally at the moment. The cart is not<br>added to the database there was issues updating the cart table with the<br>updated information when the purchase button was sent.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>The data is taken from the item&nbsp; Products table then displayed on the<br>webpage.&nbsp; The user can purchase an item from the products table and it<br>adds it to the cart list. The cart list should then populate the<br>cart table in the database. However I was having issues updating the cart<br>table so that functionality was removed for the submission.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236755158-ed5063ae-cd09-436f-88b8-9bc51aa77a43.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User can see their cart<br></p>
</td></tr>
<tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>The cart is being shown because items are added to the cart list<br>when the button is pressed. The cost and the name are grabbed from<br>the item and then put into the cart.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236754418-5e68b4dd-e569-4bee-9585-80d3e4c25136.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236754336-2c1c8abd-9bb0-4f56-8e9e-41af934ca2cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236754336-2c1c8abd-9bb0-4f56-8e9e-41af934ca2cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before cart quantity is zero and is full.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236754753-e3160b67-a930-4540-9caf-36b9e69cf8ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After cart quantity is zero and empty.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> <p>Issue with negative quantity unable to be handled. When I attempted to make<br>it negative I had an issue with the php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>A value is zero is handled by getting rid of the item. negatives<br>are not handled due to issues with the code.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236753483-40e3309d-36c9-4129-b12a-f1ca27fd68a1.png"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/84735098/236753834-dc3b4d96-025d-45dc-afd6-00434a4a5cfe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after empty cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>It empties the list. When you click the empty list button. Clear cart<br>clears the list with a javascript function called clearCart()<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/it202-milestone-2-shop-project/grade/ct359" target="_blank">Grading</a></td></tr></table>
