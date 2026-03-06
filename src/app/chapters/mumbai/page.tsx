import type { Metadata } from "next";
import MumbaiClient from "@/components/MumbaiClient";

export const metadata: Metadata = {
    title: "Mumbai Chapter | Mumbai Women Coders",
    description: "The founding hub of Women Coders, fostering innovation and inclusion in the heart of India's Silicon Valley alternative.",
};

export default function MumbaiChapterPage() {
    return <MumbaiClient />;
}
