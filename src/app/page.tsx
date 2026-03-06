import type { Metadata } from "next";
import HomeClient from "@/components/HomeClient";

export const metadata: Metadata = {
    title: "Empowering Women in Tech | Mumbai Women Coders",
    description: "Mumbai Women Coders is a dynamic community empowering women in tech through insightful meetups, hands-on workshops, and global networking opportunities.",
    openGraph: {
        title: "Empowering Women in Tech | Mumbai Women Coders",
        description: "Mumbai Women Coders is a dynamic community empowering women in tech through insightful meetups, hands-on workshops, and global networking opportunities.",
        url: "/",
        siteName: "Mumbai Women Coders",
        images: [
            {
                url: "/assets/images/logo/dark/logo-main.webp",
                width: 1200,
                height: 630,
            },
        ],
        locale: "en_US",
        type: "website",
    },
};

export default function Home() {
    return <HomeClient />;
}
