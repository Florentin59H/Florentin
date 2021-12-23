
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

import static org.junit.Assert.*;



import jeu.* ;


public class CompetitorTest {
		
	private Competitor c1;
  @BeforeEach
  public void setUp() throws Exception{
	  c1 = new Competitor("Flo") ;
  };

  @Test
  public void initTest(){
    assertEquals("Flo", c1.getName()) ;
  }


}
