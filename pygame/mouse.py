import sys
import pygame

def main():
    pygame.init()

    size = width, height = 800, 600
    black = 0, 0, 0

    screen = pygame.display.set_mode(size)

    trail = pygame.image.load("trail.png")
    ball = pygame.image.load("ball.png")
    ballrect = ball.get_rect()
    mouse_pos = pygame.mouse.get_pos()
    ballrect.center = mouse_pos

    while 1:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                sys.exit()
            if event.type == pygame.MOUSEBUTTONDOWN and event.button == 1:
                screen.fill(black)

        screen.blit(trail, ballrect)
        mouse_pos = pygame.mouse.get_pos()
        ballrect.center = mouse_pos
        screen.blit(ball, ballrect)
        pygame.display.flip()

if __name__ == "__main__":
    main()
