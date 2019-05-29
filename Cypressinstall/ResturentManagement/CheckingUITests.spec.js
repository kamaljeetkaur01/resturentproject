describe('This is my first Cypress test', () => {
    Cypress.Cookies.debug(true)

    it('Visiting Site', () => {
        cy.visit('http://localhost/gagan/templateres.php')
    });

    it('Checking Each Element Visible Test', () => {
        cy.get('[name=" txtname"]').should('exist')

        cy.get('.form > :nth-child(7)').contains('Email')

        cy.get('.form > :nth-child(11)').should('exist')

        cy.get('.form > :nth-child(11)').should('exist')

        cy.get('.form > :nth-child(15)').should('exist')

        cy.get(':nth-child(19)').should('exist')

        cy.get(':nth-child(23)').should('exist')

        cy.get(':nth-child(27)').should('exist')

    })
})