describe('This is my first Cypress test', () => {
    Cypress.Cookies.debug(true)

    it('Openining Student Portal', () => {
        cy.visit('http://localhost/gagan/templateres.php')
        
    });

    it('Check Element should be Visble', () => {

        cy.get('[name=" txtname"]').should('exist')

        cy.get('.form > :nth-child(7)').contains('Email')

        cy.get(':nth-child(1) > :nth-child(2) > a').click()
        
        cy.get('[style="height:280px;"] > p').should('exist')

        cy.get(':nth-child(1) > :nth-child(3) > a').click()

        cy.get('.col-md-12 > :nth-child(2) > :nth-child(1)').should('exist')

        cy.get(':nth-child(1) > :nth-child(5) > a').click()

        cy.get('#myImg').should('exist')

    });
    
    it('Checking Card show', () => {
        cy.get('#myImg1').should('exist')
        cy.get('#myImg2').should('exist')
        cy.get('#myImg3').should('exist')
        cy.get('#myImg4').should('exist')

    });
})