import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.*;
import javax.servlet.*;

@WebServlet("/Hello")
public class Hello extends HttpServlet 
{
   protected void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException 
   {
      res.setContentType ("text/html");
      PrintWriter out = res.getWriter ();
      
      out.println("<html>");
      out.println("   <head>");
      out.println("      <title>Servlet example</title>");
      out.println("   </head>");
      out.println("   <body>");
      out.println("       <p>Welcome to Music Box! <g;/p>");
      out.println("   </body>");
      out.println("</html>");
      out.close();
   }

/**
 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
 */
   protected void doPost(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
	   res.setContentType ("text/html");
	   PrintWriter out = res.getWriter ();
	   
	   String name = req.getParameter("name");   	 	 
	   printConfirmation(name, out);
	   doGet(req, res);       // submit more comment?
	   out.close();
	   }
	      
private void printConfirmation(String name, PrintWriter out) {
   out.println("Thanks " + name + "! <br/>");
	}
}

