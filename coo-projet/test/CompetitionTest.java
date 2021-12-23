
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

import static org.junit.Assert.*;

import java.util.*;

import jeu.* ;
import util.listSizeException;

class CompetitionTest {

	
	private  Competitor c1;
	private  Competitor c2;
	private  Competitor c3;
	private List<Competitor> lc;
	private MockCompetition cp;
	
	@BeforeEach
	  public void init(){
	    c1 = new Competitor("Flo") ;
	    c2 = new Competitor("Max") ;
	    c3 = new Competitor("Leo") ;
	    lc = new ArrayList<Competitor>() ;
	    lc.add(c1) ;
	    lc.add(c2) ;
	    lc.add(c3) ;
	    cp = new MockCompetition(lc) ;
	  }

	  @Test
	  public void initTest() throws listSizeException {
		cp.play();
	    assertNotNull(cp.getCompetitors()) ;
	    assertEquals(3, cp.getCompetitors().size()) ;
	    assertEquals("Flo", cp.getCompetitors().get(0).getName()) ;
	    assertEquals(1,cp.applyCalled);
	  }

	  @Test
	  public void MapTest() throws listSizeException{
	    assertNotNull(cp) ;
	    cp.play();
	    Map<Competitor, Integer> rank = cp.getCompetitorsMap();
	    assertTrue(	rank.containsKey(c1));
	    assertTrue(	rank.containsKey(c2));
	    assertTrue(	rank.containsKey(c3));
	  }
	  
	  @Test
	  public void listSizeExceptionTest() throws listSizeException{
		  Competitor c = new Competitor("test");
		  List<Competitor> lc1;
		  lc1 = new ArrayList<Competitor>() ;
		  lc1.add(c) ;
		  MockCompetition cp1 = new MockCompetition(lc1) ;
		  assertThrows(listSizeException.class, () -> {
			  cp1.play();
			  });
		  
	  }
}
