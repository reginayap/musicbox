import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import java.io.File;
import java.io.*;
import java.util.*;

// libraries for parsing and manipulating XML file
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.DocumentBuilder;
import org.w3c.dom.Document;
import org.w3c.dom.NodeList;
import org.w3c.dom.Node;
import org.w3c.dom.Element;


@WebServlet("/assignment5")
public class assignment5 extends HttpServlet 
{
       
   public assignment5() 
   {
        super();
        // TODO Auto-generated constructor stub
   }

   public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
   {   
       //Session Object
	   HttpSession s = request.getSession(true);
	   
	   // Session creation time
	   Date sTime = new Dat(s.getCreationTime());
	   
	   //Last Active Session time
	   Date lastActiveS = new Date(s.getLastAccessedTime());
	   
	   //Session will time out at 2700 seconds (45 minutes)
	   s.setMaxInactiveInterval(2700);
	   
	   String s = "Glad to see you again!";
	   Integer visitCount = new Integer(0);
	   String visitKey = new String("visitCount");
	   
	   //Checking for new session
	   if(s.isNew()) {
		   
		   s = "Welcome to Music Box!"
	   }else{
		   
		   visitCount = ((Integer)s.getAttribute(visitKey)) + 1;
	   }
	   
	   s.setAttribute(visitKey, visitCount);
	   
	   response.setContentType("text/html");
	   PrintWriter out = response.getWriter();
	   
	   //This is help from Tutorialspoint.com
	   String docType =
		         "<!doctype html public \"-//w3c//dtd html 4.0 " +
		         "transitional//en\">\n";
	   
	   out.println(docType + 
			   "<html>\n" +
			   		"<head><title>" + title + "</title></head>\n" +
			   		"<body background="pinkclouds.png">\n" +
			   			"<h1 align=\"center\">" + title + "</h1>\n" +
			   			"<h2 align=\"center\">Session Information</h1>\n" +
			   			"<table border = \"1\" align = \"center\">\n" + 
			   			
			   			"<tr bgcolor = \"#949494\">\n +
			   			 "<th>Session Attributes</th><th>Details</th></tr>\n" +
			   			</tr>\n" +
	                     
		                  "<tr>\n" +
		                     "  <td>id</td>\n" +
		                     "  <td>" + session.getId() + "</td>
		                  </tr>\n" +
		                  
		                  "<tr>\n" +
		                     "  <td>Creation Time</td>\n" +
		                     "  <td>" + createTime + "  </td>
		                  </tr>\n" +
		                  
		                  "<tr>\n" +
		                     "  <td>Time of Last Access</td>\n" +
		                     "  <td>" + lastAccessTime + "  </td>
		                  </tr>\n" +
		                  
		                  "<tr>\n" +
		                     "  <td>User ID</td>\n" +
		                     "  <td>" + userID + "  </td>
		                  </tr>\n" +
		                  
		                  "<tr>\n" +
		                     "  <td>Number of visits</td>\n" +
		                     "  <td>" + visitCount + "</td>
		                  </tr>\n" +
		               "</table>\n" +
		            "</body>
		         </html>"
			   
			   
			   );
	   
   }

   }

   public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
   {
      doGet(request, response);
   }