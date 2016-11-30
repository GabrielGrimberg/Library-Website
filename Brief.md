#Brief

###The Application Will Enable The Following

•	Library functionality - the users should be allowed to: 

•	Search for a book.

•	Reserve a book. 

•	View all the books that they have reserved.

###In Depth Requirements

•	Login – The user must identify themselves to the system in order to use the system and throughout the whole site. If they have not previously used the system, they must register their details.

•	Registration - This allows a user to enter their details on the system. The registration process should validate that all details are entered. Mobile phone numbers should be numeric and 10 characters in length. Password should be six characters and have a password confirmation function. The system should ensure that each user can be identified using a unique username. 

•	Search for a book: The system should allow the user to search in a number of ways: 
	
	-	By book title and/or author (including partial search on both).
	-	By book category description in a dropdown menu (book category should retrieved from database).

•	The results of the search should display as a list from which the user can then reserve a book if available. If the book is already reserved, the user should not be allowed to reserve the book.

•	Reserve a book – The system should allow a user to reserve a book provided that no-one else has reserved the book yet. The reservation functionality should capture the date on which the reservation was made.

•	View reserved books – the system should allow the user to see a list of the book(s) currently reserved by that user. User should be able to remove the reservation as well.

###Notes

Apart from HTML, I should try to use other client side technologies like cascading style sheets to make pages neat and tidy. All validation should be server-side.
 
I should not allow for more than 5 rows of data per page, where search results are being displayed. I must include functionality to display lists across more than one page. 

The screens should be neat, simple design and usable.

###Other Requirements 

•	I must create/duplicate the database given in the document. I can add more data as I wish into the tables. 

•	I must a common header and footer for your pages throughout the application. 

•	Avoid hard-coding in your programs. 

•	Include error checking as appropriate. 