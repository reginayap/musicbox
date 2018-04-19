import java.awt.Color;
import java.util.*;

// Java Bean.
// Professional Java Server Programming
// pg 133

public class AlphabetCode
{
   HashMap map;
   char c = 0;
   Integer colorNumber;
   static int FIRST_LETTER = 0x41;
   static int ALPHABET_LENGTH = 26;
   float s = 0.9f;
   float b = 0.9f;

public AlphabetCode ()
{
   this.map = new HashMap (ALPHABET_LENGTH);

   for (int i=0; i<ALPHABET_LENGTH; i++)
   {
      this.c  = (char) (FIRST_LETTER + i);
      float h = (float) i/ALPHABET_LENGTH;
      this.map.put (new Character (c), Color.getHSBColor (h, s, b));
   }
}

public void setCharacter (String nextChar)
{
   this.c = nextChar.charAt (0);
}

public String getCharacter ()
{
   return (new Character(this.c).toString());
}

public String getColor ()
{
   Color rgb = (Color) map.get (new Character (this.c));
   StringBuffer htmlColor = new StringBuffer (
                colorNumber.toHexString (rgb.getRGB () & 0x00ffffff));

   // toHexString () won't preserve leading zeros, so need to add
   // them back when they're missing
   if (htmlColor.length() != 6)
   {
      htmlColor.insert (0, "\"#00");
   }
   else
      htmlColor.insert (0, "\"#");
   htmlColor.append ("\"");

   return htmlColor.toString();
}

} // end class AlphabetCode