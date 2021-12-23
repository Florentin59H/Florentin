
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

import static org.junit.Assert.*;



import jeu.* ;


public class JournalistTest {

	
	private Journalist journalist;
  @BeforeEach
  public void setUp() throws Exception{
		journalist = new Journalist( "Flo") ;
		
  };

	@Test
	public void initTest() {
		
		assertEquals(journalist.getName(),"Flo");
	}

}
